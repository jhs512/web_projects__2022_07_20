CREATE DATABASE site44;
USE site44;

CREATE TABLE article (
    id INT,
    title CHAR(100)
);

DESC article;

INSERT INTO article
SET id = 1,
title = '속도 1';

INSERT INTO article
SET id = 2,
title = '속도 2';

INSERT INTO article
SET id = 3,
title = '속도 3';

INSERT INTO article
SET id = 4,
title = '속도 4';

INSERT INTO article
SET id = 5,
title = '속도 5';

DELETE FROM article WHERE id = 3;

SELECT * FROM article;