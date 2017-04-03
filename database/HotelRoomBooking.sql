/* Database Name: Hotel_Room_Booking */

CREATE TABLE roomCategory(
	id INT NOT NULL AUTO_INCREMENT,
    categoryName VARCHAR(50) NOT NULL,
    categoryPrice INT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE room(
	id INT NOT NULL AUTO_INCREMENT,
    roomNo INT NOT NULL,
    categoryId INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (categoryId) REFERENCES roomCategory(id)

);

CREATE TABLE customer(
	id INT NOT NULL AUTO_INCREMENT,
    fName VARCHAR(50) NOT NULL,
    lName VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address TEXT(120) NOT NULL,
    PRIMARY KEY (id)
    

);

CREATE TABLE booking(
	id INT NOT NULL AUTO_INCREMENT,
    customerId INT NOT NULL,
    bookingDate DATE  NOT NULL,
    checkIn DATE  NOT NULL,
    chekOut DATE  NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY(customerId) REFERENCES customer(id)

);

CREATE TABLE roomBooking(
    id INT NOT NULL AUTO_INCREMENT,
    bookingId INT NOT  NULL,
    roomId INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(bookingId) REFERENCES booking(id),
    FOREIGN KEY(roomId) REFERENCES room(id)
    

);

CREATE TABLE payment(
	id INT NOT NULL AUTO_INCREMENT,
    customerId INT NOT NULL,
    categoryId INT NOT NULL,
    roomQuantity INT NOT NULL,
    roomPrice  INT NOT NULL,
    totalPrice INT NOT NULL,
    due INT NOT NULL,
    paid INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(customerId) REFERENCES customer(id),
    FOREIGN KEY(categoryId) REFERENCES roomCategory(id)
    
);


