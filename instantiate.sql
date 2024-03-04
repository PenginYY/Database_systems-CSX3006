/* CREATE TABLE */

CREATE TABLE room (
    room_no NUMERIC(4),
    PRIMARY KEY(room_no)
);

CREATE TABLE account(
    email       VARCHAR(319)    DEFAULT 'deleted',
    password    VARCHAR(200)    NOT NULL,
    firstname   VARCHAR(50)     NOT NULL,
    lastname    VARCHAR(50)     NOT NULL,
    address     VARCHAR(500),
    birthdate   DATE,
    phone       CHAR(10),
    PRIMARY KEY(email)
);

CREATE TABLE employee(
    email   VARCHAR(319)    DEFAULT 'deleted',
    role    ENUM('Reservation Staff', 'Front Desk Staff') NOT NULL,
    PRIMARY KEY(email),
    FOREIGN KEY(email) REFERENCES account(email)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE customer(
    email                   VARCHAR(319)    DEFAULT 'deleted',
    emergency_name          VARCHAR(101),
    emergency_phone         CHAR(10),
    emergency_relationship  ENUM('Parent', 'Sibling', 'Significant Other' , 'Daughter/Son', 'Relative', 'Friend', 'Other'),
    PRIMARY KEY(email),
    FOREIGN KEY(email) REFERENCES account(email)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE reservation(
    reservation_no  INT AUTO_INCREMENT,
    email           VARCHAR(319)        NOT NULL    DEFAULT 'deleted',
    agent           ENUM('Walk-in', 'Agoda', 'Booking.com') NOT NULL,
    total_room      NUMERIC(3)          NOT NULL	CHECK (total_room >= 1 AND total_room <= 100),
    arrive_date     DATE                NOT NULL,
    depart_date     DATE                NOT NULL,
    PRIMARY KEY(reservation_no),
    FOREIGN KEY(email) REFERENCES customer(email)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);

CREATE TABLE paid(
    reservation_no  INT,
    amount          NUMERIC(10,2),
    PRIMARY KEY(reservation_no),
    FOREIGN KEY(reservation_no) REFERENCES reservation(reservation_no)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE in_house(
    reservation_no  INT,
    PRIMARY KEY(reservation_no),
    FOREIGN KEY(reservation_no) REFERENCES reservation(reservation_no)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE reserved_room(
    reservation_no  INT,
    room_no         NUMERIC(4),
    PRIMARY KEY(reservation_no, room_no),
    FOREIGN KEY(reservation_no) REFERENCES reservation(reservation_no)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(room_no) REFERENCES room(room_no)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

/* Populate the Database */

/*
INSERT INTO room
*/
INSERT INTO room(room_no)
VALUES
    (101), (102), (103), (104), (105), (106), (107), (108), (109), (110),
    (201), (202), (203), (204), (205), (206), (207), (208), (209), (210),
    (301), (302), (303), (304), (305), (306), (307), (308), (309), (310),
    (401), (402), (403), (404), (405), (406), (407), (408), (409), (410),
    (501), (502), (503), (504), (505), (506), (507), (508), (509), (510),
    (601), (602), (603), (604), (605), (606), (607), (608), (609), (610),
    (701), (702), (703), (704), (705), (706), (707), (708), (709), (710),
    (801), (802), (803), (804), (805), (806), (807), (808), (809), (810),
    (901), (902), (903), (904), (905), (906), (907), (908), (909), (910),
    (1001), (1002), (1003), (1004), (1005), (1006), (1007), (1008), (1009), (1010);

/*
INSERT INTO account
    The first row is a row for deleted accounts.
*/
INSERT INTO account(email, password, firstname, lastname, address, birthdate, phone)
VALUES
    ('deleted',             'deleted',     'deleted',   'deleted',  null, null, null),    /* deleted accounts */
    ('edna@gmail.com',      'employee123', 'Edna',      'Mode',     null, null, null),    /* employee1 Edna Mode */
    ('randle@gmail.com',    'employee123', 'Randle',    'McMurphy', null, null, null),    /* employee2 Randle McMurphy */
    ('optimus@gmail.com',   'employee123', 'Optimus',   'Prime',    null, null, null),    /* employee3 Optimus Prime */
    ('norman@gmail.com',    'employee123', 'Norman',    'Bates',    null, null, null),    /* employee4 Norman Bates */
    ('wednesday@gmail.com', 'employee123', 'Wednesday', 'Addams',   null, null, null),    /* employee5 Wednesday Addams */
    ('inigo@gmail.com',     'employee123', 'Inigo',     'Montoya',  null, null, null),    /* employee6 Inigo Montoya */
    ('sherman@gmail.com',   'qwerty123',   'Sherman',   'Peabody',  null, null, null),    /* customer1 Sherman Peabody */
    ('chayapat@gmail.com',  'qwerty123',   'Chayapat',  'Pangpon',  null, null, null),    /* customer2 Chayapat Pangpon */
    ('esther@gmail.com',    'qwerty123',   'Esther',    'Howard',   null, null, null),    /* customer3 Esther Howard */
    ('forrest@gmail.com',   'qwerty123',   'Forrest',   'Gump',     null, null, null),    /* customer4 Forrest Gump */
    ('jack@gmail.com',      'qwerty123',   'Jack',      'Sparrow',  null, null, null);    /* customer5 Jack Sparrow */

/*
INSERT INTO employee
*/
INSERT INTO employee(email, role)
VALUES
    ('edna@gmail.com',      'Reservation Staff'),
    ('randle@gmail.com',    'Reservation Staff'),
    ('optimus@gmail.com',   'Reservation Staff'),
    ('norman@gmail.com',    'Front Desk Staff'),
    ('wednesday@gmail.com', 'Front Desk Staff'),
    ('inigo@gmail.com',     'Front Desk Staff');


/*
INSERT INTO customer
    The first row is a row for deleted accounts.
*/
INSERT INTO customer(email, emergency_name, emergency_phone, emergency_relationship)
VALUES
    ('deleted',            null, null, null), /* deleted accounts */
    ('sherman@gmail.com', 'Mr.Hector Peabody', '0987654321', 'Parent'), /* customer1 Sherman Peabody */
    ('chayapat@gmail.com', null, null, null), /* customer2 Chayapat Pangpon */
    ('esther@gmail.com',   null, null, null), /* customer3 Esther Howard */
    ('forrest@gmail.com',  null, null, null), /* customer4 Forrest Gump */
    ('jack@gmail.com',     null, null, null); /* customer5 Jack Sparrow */

/*
INSERT INTO reservation
    reservation(reservation_no) is AUTO_INCREMENT
*/
INSERT INTO reservation(email, agent, total_room, arrive_date, depart_date)
VALUES
    ('sherman@gmail.com',   'Walk-in',     2, '2024-03-03', '2024-03-04'), /* 1 TotalRoom: 2 */
    ('chayapat@gmail.com',  'Agoda',       1, '2024-03-04', '2024-03-05'), /* 2 TotalRoom: 1 */
    ('esther@gmail.com',    'Booking.com', 2, '2024-03-05', '2024-03-06'), /* 3 TotalRoom: 2 */
    ('forrest@gmail.com',   'Walk-in',     1, '2024-03-05', '2024-03-07'), /* 4 TotalRoom: 1 */
    ('jack@gmail.com',      'Walk-in',     3, '2024-03-06', '2024-03-07'), /* 5 TotalRoom: 3 */
    ('jack@gmail.com',      'Walk-in',     2, '2024-03-06', '2024-03-08'); /* 6 TotalRoom: 2 */

/*
INSERT INTO reserved_room
*/
INSERT INTO reserved_room(reservation_no, room_no)
VALUES
    (1, 101), (1, 102),              /* 1 TotalRoom: 2 */
    (2, 103),                        /* 2 TotalRoom: 1 */
    (3, 104), (3, 105),              /* 3 TotalRoom: 2 */
    (4, 106),                        /* 4 TotalRoom: 1 */
    (5, 107), (5, 108), (5, 109),    /* 5 TotalRoom: 3 */
    (6, 201), (6, 202);              /* 6 TotalRoom: 2 */