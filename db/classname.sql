CREATE FUNCTION classname(id INT) RETURNS VARCHAR(300) DETERMINISTIC
BEGIN
    DECLARE v_name VARCHAR(300);
    IF (id = -1) THEN
       RETURN 'No class selected';

    ELSE
       SELECT name INTO v_name from cmai_classes where class_id=id;
       RETURN v_name;
    END IF;
END;