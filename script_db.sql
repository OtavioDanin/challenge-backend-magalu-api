CREATE DATABASE scheduling
    WITH
    OWNER = admin
    ENCODING = 'UTF8'
    LOCALE_PROVIDER = 'libc'
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

CREATE SCHEMA scheduling
    AUTHORIZATION admin;

CREATE TABLE scheduling.message
(
    id uuid NOT NULL,
    message character varying,
    recipient bit varying,
    date timestamp without time zone,
    status bigint,
    PRIMARY KEY (id)
);

ALTER TABLE IF EXISTS scheduling.message
    OWNER to admin;