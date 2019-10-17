SELECT `title`, `summary`
FROM `film` WHERE LOCATE(lower('Vincent'), `summary`) > 0
ORDER BY `id_film` ASC;
