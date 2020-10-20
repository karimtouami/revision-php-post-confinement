# for articlesLoadAll()
SELECT * FROM articles a 
	INNER JOIN users u 
		ON a.users_idusers = u.idusers
ORDER BY a.thedate DESC;

# for articlesLoadAllResume() LEFT(table, endpoint) - SUBSTRING or SUBSTR(table, startpoint (1 minimum !), endpoint)
SELECT a.idarticles, a.titre, LEFT(a.texte,300) AS texte, a.thedate, u.idusers, u.thename 
FROM articles a 
	INNER JOIN users u 
		ON a.users_idusers = u.idusers
ORDER BY a.thedate DESC;