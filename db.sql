CREATE DATABASE "Send-now";

CREATE TABLE "Users" (
    "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
    "name"  VARCHAR(20),
    "lastName" VARCHAR(25),
    "userName" VARCHAR(20),
    "email" VARCHAR(30),
    "pass" VARCHAR(20),
    "country" VARCHAR(20),
    "phone" INT(15), 
    "profile_photo_id" INT,
    FOREIGN KEY ("profile_photo_id") REFERENCES "Profile_photos"("id")
);

CREATE TABLE "Admins" (
    "id"    INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
    "name"  VARCHAR(20),
    "lastName" VARCHAR(30),
    "userName" VARCHAR(20),
    "email" VARCHAR(30),
    "pass" VARCHAR(20),
    "country" VARCHAR(20),
    "phone" INT(15), 
    "profile_photo_id" INT,
    FOREIGN KEY ("profile_photo_id") REFERENCES "Profile_photos"("id")
);

CREATE TABLE "Profile_photos" (
    "id"    INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
    "url"   VARCHAR(100)
);

CREATE TABLE "Products" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "name" VARCHAR,
  "description" VARCHAR,
  "price" FLOAT,
  "stock" INT,
  "product_img" VARCHAR,
  "user_id" INT,
  "category_id" INT,
  FOREIGN KEY ("user_id") REFERENCES "Users"("id"),
  FOREIGN KEY ("category_id") REFERENCES "Categories"("id")
);

CREATE TABLE "Categories" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "name" VARCHAR(30)
);

CREATE TABLE "Shopping_car" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "user_id" INT,
  "product_id" INT,
  "total" FLOAT(100),
  FOREIGN KEY ("user_id") REFERENCES "Users"("id"),
  FOREIGN KEY ("product_id") REFERENCES "Products"("id")
);

CREATE TABLE "Buys" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "user_id" INT,
  "date" DATE,
  "total" FLOAT(100),
  FOREIGN KEY ("user_id") REFERENCES "Users"("id")
);

CREATE TABLE "Purchase_details" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "buy_id" INT,
  "product_id" INT,
  "quantity" INT(100),
  FOREIGN KEY ("buy_id") REFERENCES "Buys"("id"),
  FOREIGN KEY ("product_id") REFERENCES "Products"("id")
);

CREATE TABLE "Chats" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "message_id" INT,
  "transmitter_id" INT,
  "receiver_id" INT,
  FOREIGN KEY ("message_id") REFERENCES "Messages"("id"),
  FOREIGN KEY ("transmitter_id") REFERENCES "Users"("id"),
  FOREIGN KEY ("receiver_id") REFERENCES "Users"("id")
);

CREATE TABLE "Messages" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "content" VARCHAR(500),
  "message_date" DATE,
);

CREATE TABLE "Reviews" (
  "id" INT(100) NOT NULL PRIMARY KEY IDENTITY(1,1),
  "review" VARCHAR,
  "calification" FLOAT,
  "user_id" INT,
  "product_id" INT,
  FOREIGN KEY ("user_id") REFERENCES "Users"("id"),
  FOREIGN KEY ("product_id") REFERENCES "Products"("id")
);












CREATE TABLE Profile_photos (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(100)
);

CREATE TABLE Users (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    lastName VARCHAR(25) NOT NULL,
    userName VARCHAR(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(20) NOT NULL,
    country VARCHAR(20) NOT NULL,
    phone INT(15) NOT NULL, 
    profile_photo_id INT,
    FOREIGN KEY (profile_photo_id) REFERENCES Profile_photos(id)
);

CREATE TABLE Admins (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    userName VARCHAR(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(20) NOT NULL,
    country VARCHAR(20) NOT NULL,
    phone INT(15) NOT NULL, 
    profile_photo_id INT,
    FOREIGN KEY (profile_photo_id) REFERENCES Profile_photos(id)
);

CREATE TABLE Categories (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL
);

CREATE TABLE Products (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  price FLOAT(100,2) NOT NULL,
  stock INT(100) NOT NULL,
  product_img VARCHAR(255) NOT NULL,
  user_id INT,
  category_id INT,
  FOREIGN KEY (user_id) REFERENCES Users(id),
  FOREIGN KEY (category_id) REFERENCES Categories(id)
);

CREATE TABLE Shopping_car (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  product_id INT,
  total FLOAT(100,2) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES Users(id),
  FOREIGN KEY (product_id) REFERENCES Products(id)
);

CREATE TABLE Buys (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  date DATE,
  total FLOAT(100),
  FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE Purchase_details (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  buy_id INT,
  product_id INT,
  quantity INT(100) NOT NULL,
  FOREIGN KEY (buy_id) REFERENCES Buys(id),
  FOREIGN KEY (product_id) REFERENCES Products(id)
);

CREATE TABLE Messages (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  content VARCHAR(500),
  message_date DATE
);

CREATE TABLE Chats (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  message_id INT,
  transmitter_id INT,
  receiver_id INT,
  FOREIGN KEY (message_id) REFERENCES Messages(id),
  FOREIGN KEY (transmitter_id) REFERENCES Users(id),
  FOREIGN KEY (receiver_id) REFERENCES Users(id)
);

CREATE TABLE Reviews (
  id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  review VARCHAR(255),
  calification FLOAT(2,1),
  user_id INT,
  product_id INT,
  FOREIGN KEY (user_id) REFERENCES Users(id),
  FOREIGN KEY (product_id) REFERENCES Products(id)
);