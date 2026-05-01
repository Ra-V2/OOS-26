import './App.css'

import { BrowserRouter, Routes, Route, Link } from "react-router-dom";
import Products from "./pages/Products";
import Payments from "./pages/Payments";
import Cart from "./pages/Cart";

function App() {
  return (
    <BrowserRouter>
      <nav>
        <Link to="/">Products</Link> |{" "}
        <Link to="/cart">Cart</Link> |{" "}
        <Link to="/payments">Payments</Link>
      </nav>

      <Routes>
        <Route path="/" element={<Products />} />
        <Route path="/cart" element={<Cart />} />
        <Route path="/payments" element={<Payments />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;