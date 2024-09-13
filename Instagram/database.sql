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


CREATE TABLE IF NOT EXISTS image(
    id              int(255) auto_increment not null,
    user_id         int(255),
    image_path      varchar(255),
    description     text,
    created_at      datetime, 
    updated_at      datetime,
    CONSTRAINT pk_images PRIMARY KEY (id),
    CONSTRAINT fk_images_users FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB;

 
 