import { useCart } from "../context/cartContextCore";

export default function Cart() {
    const { cart } = useCart();

    return (
        <div>
            <h1>Cart</h1>

            {cart.length === 0 ? (
                <p>Cart is empty</p>
            ) : (
                cart.map((item) => (
                    <div key={item.id}>
                        {item.name} - {item.price} zł
                    </div>
                ))
            )}
        </div>
    );
}