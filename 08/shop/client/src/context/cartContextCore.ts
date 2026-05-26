import { createContext, useContext } from "react";

export type Product = {
    id: number;
    name: string;
    price: number;
};

export type CartContextType = {
    cart: Product[];
    addToCart: (product: Product) => void;
};

export const CartContext = createContext<CartContextType | null>(null);

export const useCart = () => {
    const context = useContext(CartContext);
    if (!context) throw new Error("useCart must be used inside CartProvider");
    return context;
};