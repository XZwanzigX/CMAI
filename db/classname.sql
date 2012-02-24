CREATE PROCEDURE CLASSNAME(IN id INT, OUT class_name VARCHAR(300))
BEGIN
  IF (id = -1) THEN
       SET class_name='No class selected';
  ELSE
     SELECT name INTO class_name from cmai_classes where class_id=id;
  END IF;
END;