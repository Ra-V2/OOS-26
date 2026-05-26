import { useMemo, useState } from "react";
import type { SyntheticEvent } from "react";

type FormValues = {
    username: string;
    email: string;
    password: string;
};

type FormErrors = Partial<Record<keyof FormValues, string>>;

const INITIAL_VALUES: FormValues = {
    username: "",
    email: "",
    password: "",
};

const EMAIL_REGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

export default function Register() {
    const [values, setValues] = useState<FormValues>(INITIAL_VALUES);
    const [errors, setErrors] = useState<FormErrors>({});
    const [successMessage, setSuccessMessage] = useState("");

    const hasErrors = useMemo(() => Object.keys(errors).length > 0, [errors]);

    const validate = (currentValues: FormValues) => {
        const nextErrors: FormErrors = {};

        if (!currentValues.username.trim()) {
            nextErrors.username = "Username is required.";
        }

        if (!currentValues.email.trim()) {
            nextErrors.email = "Email is required.";
        } else if (!EMAIL_REGEX.test(currentValues.email.trim())) {
            nextErrors.email = "Enter a valid email address.";
        }

        if (!currentValues.password.trim()) {
            nextErrors.password = "Password is required.";
        }

        return nextErrors;
    };

    const onSubmit = (event: SyntheticEvent<HTMLFormElement, SubmitEvent>) => {
        event.preventDefault();

        const nextErrors = validate(values);
        setErrors(nextErrors);

        if (Object.keys(nextErrors).length > 0) {
            setSuccessMessage("");
            return;
        }

        setSuccessMessage("Registration completed successfully.");
        setValues(INITIAL_VALUES);
    };

    return (
        <section className="register-page">
            <h1>Register</h1>
            <form className="register-form" onSubmit={onSubmit} noValidate>
                <label htmlFor="register-username">Username</label>
                <input
                    id="register-username"
                    name="username"
                    value={values.username}
                    onChange={(event) =>
                        setValues((current) => ({ ...current, username: event.target.value }))
                    }
                />
                {errors.username && (
                    <p className="field-error" id="register-username-error">
                        {errors.username}
                    </p>
                )}

                <label htmlFor="register-email">Email</label>
                <input
                    id="register-email"
                    name="email"
                    value={values.email}
                    onChange={(event) =>
                        setValues((current) => ({ ...current, email: event.target.value }))
                    }
                />
                {errors.email && (
                    <p className="field-error" id="register-email-error">
                        {errors.email}
                    </p>
                )}

                <label htmlFor="register-password">Password</label>
                <input
                    id="register-password"
                    name="password"
                    type="password"
                    value={values.password}
                    onChange={(event) =>
                        setValues((current) => ({ ...current, password: event.target.value }))
                    }
                />
                {errors.password && (
                    <p className="field-error" id="register-password-error">
                        {errors.password}
                    </p>
                )}

                <button id="register-submit" type="submit">
                    Create account
                </button>
            </form>

            {hasErrors && (
                <p className="error-summary" id="register-errors-summary">
                    Please fix the highlighted fields.
                </p>
            )}

            {successMessage && (
                <p className="success-message" id="register-success-message">
                    {successMessage}
                </p>
            )}
        </section>
    );
}
