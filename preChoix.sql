DELIMITER |

CREATE PROCEDURE calculer_prechoix()                        
BEGIN   
	DECLARE IdU int;
	DECLARE IdS int;
	DECLARE RowInd int;

	CREATE TEMPORARY TABLE user_temp
	AS SELECT 	u.idUser, u.rangMembre, p.stage_id, p.position
	FROM pre_choix p, user u
	WHERE u.idUser = p.id_user
	ORDER BY u.rangMembre, p.position;

	CREATE TEMPORARY TABLE stage_temp
	AS SELECT DISTINCT	p.stage_id, s.places
	FROM pre_choix p, stage s
	WHERE s.id = p.stage_id;

	UPDATE pre_choix set admisProd = 0;

	SELECT count(*) INTO RowInd FROM user_temp;    
	WHILE RowInd > 0 DO   
		select idUser INTO IdU from user_temp LIMIT 0,1; 
        select stage_id INTO IdS from user_temp LIMIT 0,1;
		update pre_choix set admisProd = 1 where id_user = IdU and stage_id = IdS;
		delete from user_temp where idUser = IdU;
		update stage_temp set places = places - 1 where stage_id = IdS;
		delete from user_temp where stage_id in (select stage_id from stage_temp where places <= 0);

		set RowInd = RowInd - 1;                               
	END WHILE;
END;