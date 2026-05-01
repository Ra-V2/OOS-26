import { useEffect, useState } from "react";
import axios from "axios";

type Product = {
    id: number;
    name: string;
    price: number;
};

export default function Products() {
    const [products, setProducts] = useState<Product[]>([]);

    useEffect(() => {
        axios
            .get("http://localhost:5000/products")
            .then((res) => setProducts(res.data))
            .catch((err) => console.error(err));
    }, []);

    return (
        <div>
            <h1>Products</h1>

            {products.map((p) => (
                <div key={p.id}>
                    {p.name} - {p.price} zł
                </div>
            ))}
        </div>
    );
}