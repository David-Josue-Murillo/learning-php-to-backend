CREATE DATABASE IF NOT EXISTS instagram;
USE instagram;

CREATE TABLE users(
    id              int(255) auto_increment not null,
    role            varchar(20),
    name            varchar(10), 
    surname         varchar(200),
    nick            varchar(100),
    email           varchar(255),
    password        varchar(255),
    image           varchar(255),
    created_at      datetime, 
    updated_at      datetime,
    remenber_token  varchar(255),
    CONSTRAINT pk_users PRIMARY KEY (id)
) ENGINE=InnoDB;

/* DATOS DE PRUEBA */

INSERT INTO users VALUES(NULL, 'user', 'David', 'Murillo', 'DevDavid', 'dm514821@gmail.com', 'Lucha533.', NULL, CURTIME(), CURTIME(), NULL);
INSERT INTO users VALUES(NULL, 'user', 'Josue', 'Serrano', 'DevJosue', 'josue@gmail.com', 'Lucha507.', NULL, CURTIME(), CURTIME(), NULL);
INSERT INTO users VALUES(NULL, 'user', 'Jair', 'Murillo', 'DevJair', 'jair@gmail.com', 'Panama507', NULL, CURTIME(), CURTIME(), NULL);

/* DATOS DE PRUEBA */


CREATE TABLE IF NOT EXISTS images(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_path      varchar(255),
    description     text,
    created_at      datetime, 
    updated_at      datetime,
    CONSTRAINT pk_images PRIMARY KEY (id),
    CONSTRAINT fk_images_users FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB;

/* DATOS DE PRUEBA */

INSERT INTO images VALUES(NULL, 1, 'david.jpg', 'Imagen representativa de David Murillo', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL, 2, 'josue.jpg', 'Imagen representativa de Josue Serrano', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL, 3, 'jair.jpg', 'Imagen representativa de Jair Murillo', CURTIME(), CURTIME());

/* DATOS DE PRUEBA */


CREATE TABLE IF NOT EXISTS comments(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_id        int(255),
    content         text,
    created_at      datetime, 
    updated_at      datetime,
    CONSTRAINT pk_comments          PRIMARY KEY (id),
    CONSTRAINT fk_commnets_users    FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_commnets_images   FOREIGN KEY (image_id) REFERENCES images(id)
) ENGINE=InnoDB; 

/* DATOS DE PRUEBA */

INSERT INTO comments VALUES(NULL, 1, 1, 'Sos re lindo', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL, 1, 3, 'Mancooo', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL, 2, 1, 'Pendejooo', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL, 2, 2, 'Muy Chulo', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL, 3, 3, 'Papasito rico', CURTIME(), CURTIME());

/* DATOS DE PRUEBA */


CREATE TABLE IF NOT EXISTS likes(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_id        int(255),
    created_at      datetime, 
    updated_at      datetime,
    CONSTRAINT pk_likes          PRIMARY KEY (id),
    CONSTRAINT fk_likes_users    FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_likes_images   FOREIGN KEY (image_id) REFERENCES images(id)
) ENGINE=InnoDB; 

/* DATOS DE PRUEBA */

INSERT INTO likes VALUES(NULL, 1, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(NULL, 1, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES(NULL, 2, 3, CURTIME(), CURTIME());
INSERT INTO likes VALUES(NULL, 2, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(NULL, 2, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES(NULL, 3, 1, CURTIME(), CURTIME());

/* DATOS DE PRUEBA */