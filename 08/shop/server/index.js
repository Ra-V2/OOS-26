const express = require("express");
const cors = require("cors");

const app = express();

app.use(cors());
app.use(express.json());

const products = [
  { id: 1, name: "Book", price: 100 },
  { id: 2, name: "Pen", price: 5 },
  { id: 3, name: "Notebook", price: 20 },
];

// GET products
app.get("/products", (req, res) => {
  res.json(products);
});

// POST payment
app.post("/payments", (req, res) => {
  console.log("Payment received:", req.body);
  res.json({ status: "success" });
});

app.listen(5000, () => {
  console.log("Server running on http://localhost:5000");
});
