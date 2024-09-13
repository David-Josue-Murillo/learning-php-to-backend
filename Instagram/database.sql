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