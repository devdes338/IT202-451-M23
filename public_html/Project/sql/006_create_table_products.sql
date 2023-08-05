CREATE TABLE IF NOT EXISTS Products(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) UNIQUE, -- alternatively you'd have a SKU that's unique
    description text,
    category varchar(30),
    stock int DEFAULT  0,
    cost int DEFAULT  99999, -- my cost is int because I don't have regular currency; shop people may want to record it as pennies
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    visibility TINYINT(1) DEFAULT 1,
    check (stock >= 0), -- don't allow negative stock; I don't allow backorders
    check (cost >= 0) -- don't allow negative costs
)