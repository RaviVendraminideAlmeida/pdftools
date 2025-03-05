CREATE TABLE features (
    id SERIAL,
    name TEXT,
    description TEXT,
    image bytea,
    CONSTRAINT pk_features PRIMARY KEY (id)
);