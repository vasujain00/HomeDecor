select s.Fname ,s.Lname,s.Sell_ID,c.Cat_ID,c.Cat_name from seller s,category c,product p where p.Cat_ID = c.Cat_ID and s.Sell_ID = p.Sell_ID and c.Cat_ID and p.Cat_ID = c.Cat_ID group by p.Sell_ID having count(p.Cat_ID)>5