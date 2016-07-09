--inserts the ninth digit to mobile numbers from Brazil
UPDATE tb_clients SET 
celular = CONCAT(SUBSTRING(celular, 1, 4),'9',SUBSTRING(celular, 5, 13)) # ATRIBUI O NOVO RESULTADO
WHERE celular IS NOT NULL 
AND LENGTH(celular) = 13