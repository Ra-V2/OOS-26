import axios from "axios";

export default function Payments() {
    const handlePayment = () => {
        const paymentData = {
            amount: 100,
            currency: "PLN",
        };

        axios
            .post("http://localhost:5000/payments", paymentData)
            .then((res) => {
                console.log("Payment success:", res.data);
            })
            .catch((err) => console.error(err));
    };

    return (
        <div>
            <h1>Payments</h1>
            <button onClick={handlePayment}>Pay</button>
        </div>
    );
}