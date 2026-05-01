import { useEffect, useState } from "react";
import axios from "axios";
import { useCart } from "../context/cartContextCore";
import API_URL from "../api";

type Product = {
    id: number;
    name: string;
    price: number;
};

export default function Products() {
    const [products, setProducts] = useState<Product[]>([]);
    const { addToCart } = useCart();

    useEffect(() => {
        axios.get(`${API_URL}/products`)
            .then((res) => setProducts(res.data));
    }, []);

    return (
        <div>
            <h1>Products</h1>

            {products.map((p) => (
                <div key={p.id}>
                    {p.name} - {p.price} zł
                    <button onClick={() => addToCart(p)}>Add to cart</button>
                </div>
            ))}
        </div>
    );
}