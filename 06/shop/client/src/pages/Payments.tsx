import axios from "axios";
import { useState } from "react";
import { useCart } from "../context/cartContextCore";
import API_URL from "../api";

export default function Payments() {
    const { cart } = useCart();
    const [status, setStatus] = useState<string | null>(null);

    const handlePayment = async () => {
        setStatus(null);
        try {
            await axios.post(`${API_URL}/payments`, { cart });
            setStatus("Payment successful");
        } catch {
            setStatus("Payment failed");
        }
    };

    return (
        <div>
            <h1>Payments</h1>
            <button onClick={handlePayment}>Pay for {cart.length} items</button>
            {status && <p>{status}</p>}
        </div>
    );
}