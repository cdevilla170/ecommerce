DELETE FROM Orders 
WHERE OrderID NOT IN 
(SELECT MIN(OrderID) 
FROM Orders 
GROUP BY CustomerID, OrderDate)
