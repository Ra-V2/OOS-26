curl -X PUT http://localhost:8080/api/products/1 \
-H "Content-Type: application/json" \
-d '{"name":"Updated","price":20}'