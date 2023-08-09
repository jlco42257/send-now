CREATE DATABASE "Send-now";

CREATE TABLE "Users" (
    PRIMARY KEY ("id" AUTOINCREMENT),
    "name"  VARCHAR,
    "lastName" VARCHAR,
    "userName" VARCHAR,
    "email" VARCHAR,
    "pass" VARCHAR,
    "country" VARCHAR,
    "phone" INT, 
    "profile_photo_id" INT
);

CREATE TABLE "Admins" (
    "id"    INT,
    "name"  VARCHAR,
    "lastName" VARCHAR,
    "userName" VARCHAR,
    "email" VARCHAR,
    "pass" VARCHAR,
    "country" VARCHAR,
    "phone" INT, 
    "profile_photo_id" INT
);

CREATE TABLE "Profile_photos" (
    "id"    INT,
    "url"   VARCHAR
);

CREATE TABLE "Products" (
  "id" INT [pk],
  "name" VARCHAR,
  "description" VARCHAR,
  "price" FLOAT,
  "stock" INT,
  "product_img" VARCHAR,
  "users_id" INT [ref: > Users.id],
  "categories_id" INT [ref: > Categories.id]
);

CREATE TABLE "Categories" (
  "id" INT [pk],
  "name" VARCHAR
);

CREATE TABLE "Shopping_car" (
  "id" INT [pk],
  "user_id" INT [ref: > Users.id],
  "product_id" INT [ref: < Products.id],
  "total" FLOAT
);

CREATE TABLE "Buys" (
  "id" INT [pk],
  "user_id" INT [ref: > Users.id],
  "date" DATE,
  "total" FLOAT
);

CREATE TABLE "Purchase_details" (
  "id" INT [pk],
  "buys_id" INT [ref: > Buys.id],
  "product_id" INT [ref: > Products.id],
  "quantity" INT
);

CREATE TABLE "Chats" (
  "id" INT [pk],
  "message_id" INT [ref: < Message.id],
  "transmitter_id" INT [ref: > Users.id],
  "receiver_id" INT [ref: > Users.id]
);

CREATE TABLE "Message" (
  "id" INT [pk],
  "content" VARCHAR,
  "message_date" DATE
);

CREATE TABLE "Reviews" (
  "id" INT [pk],
  "review" VARCHAR,
  "calification" FLOAT,
  "user_id" INT [ref: > Products.id],
  "product_id" INT [ref: > Products.id]
);