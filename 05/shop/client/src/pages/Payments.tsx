import axios from "axios";
import { useCart } from "../context/cartContextCore";

export default function Payments() {
    const { cart } = useCart();

    const handlePayment = () => {
        axios.post("http://localhost:5000/payments", { cart })
            .then((res) => console.log(res.data));
    };

    return (
        <div>
            <h1>Payments</h1>
            <button onClick={handlePayment}>Pay for {cart.length} items</button>
        </div>
    );
}