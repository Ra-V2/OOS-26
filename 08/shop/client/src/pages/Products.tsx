import { useEffect, useState } from "react";
import axios from "axios";
import { useCart } from "../context/cartContextCore";
import type { Product } from "../context/cartContextCore";
import API_URL from "../api";

export default function Products() {
    const [products, setProducts] = useState<Product[]>([]);
    const [error, setError] = useState<string | null>(null);
    const { addToCart } = useCart();

    useEffect(() => {
        let mounted = true;
        const fetchProducts = async () => {
            try {
                const response = await axios.get<Product[]>(`${API_URL}/products`);
                if (mounted) setProducts(response.data);
            } catch {
                if (mounted) setError("Failed to load products");
            }
        };

        fetchProducts();
        return () => {
            mounted = false;
        };
    }, []);

    if (error) return <div>{error}</div>;

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