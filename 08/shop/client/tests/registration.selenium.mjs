import assert from "node:assert/strict";
import { Builder, By, until } from "selenium-webdriver";

const BASE_URL =
  process.env.REGISTRATION_BASE_URL ?? "http://localhost:5174/register";

async function run() {
  const driver = await new Builder().forBrowser("chrome").build();

  try {
    await driver.get(BASE_URL);
    await driver.wait(until.elementLocated(By.id("register-submit")), 10000);
    await driver.findElement(By.id("register-submit")).click();

    const usernameError = await driver.wait(
      until.elementLocated(By.id("register-username-error")),
      10000,
    );
    const emailError = await driver.wait(
      until.elementLocated(By.id("register-email-error")),
      10000,
    );
    const passwordError = await driver.wait(
      until.elementLocated(By.id("register-password-error")),
      10000,
    );
    const summaryError = await driver.findElement(
      By.id("register-errors-summary"),
    );

    assert.equal(await usernameError.getText(), "Username is required.");
    assert.equal(await emailError.getText(), "Email is required.");
    assert.equal(await passwordError.getText(), "Password is required.");
    assert.equal(
      await summaryError.getText(),
      "Please fix the highlighted fields.",
    );

    await driver.findElement(By.id("register-username")).sendKeys("jan");
    await driver
      .findElement(By.id("register-email"))
      .sendKeys("jan-at-example.com");
    await driver.findElement(By.id("register-password")).sendKeys("secret123");
    await driver.findElement(By.id("register-submit")).click();

    const invalidEmailError = await driver.wait(
      until.elementLocated(By.id("register-email-error")),
      10000,
    );
    assert.equal(
      await invalidEmailError.getText(),
      "Enter a valid email address.",
    );

    const successElements = await driver.findElements(
      By.id("register-success-message"),
    );
    assert.equal(successElements.length, 0);

    const emailInput = await driver.findElement(By.id("register-email"));
    await emailInput.clear();
    await emailInput.sendKeys("jan@example.com");
    await driver.findElement(By.id("register-submit")).click();

    const successMessage = await driver.wait(
      until.elementLocated(By.id("register-success-message")),
      10000,
    );
    assert.equal(
      await successMessage.getText(),
      "Registration completed successfully.",
    );

    console.log("PASS: registration form validation scenarios completed.");
  } finally {
    await driver.quit();
  }
}

run().catch((error) => {
  console.error("ERROR:", error);
  process.exitCode = 1;
});
