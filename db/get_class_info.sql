CREATE PROCEDURE get_class_info (IN v_email varchar(200), IN br varchar(23),
OUT t1045_class VARCHAR(300),
OUT t1330_class VARCHAR(300),
OUT t1515_class VARCHAR(300),
OUT t1700_class VARCHAR(300),
OUT w0900_class VARCHAR(300),
OUT w1045_class VARCHAR(300),
OUT w1330_class VARCHAR(300),
OUT w1515_class VARCHAR(300),
OUT w1700_class VARCHAR(300),
OUT th0900_class VARCHAR(300),
OUT th1045_class VARCHAR(300),
OUT th1330_class VARCHAR(300),
OUT th1515_class VARCHAR(300),
OUT th1700_class VARCHAR(300))
BEGIN
    declare t1045, t1330, t1515, t1700,
         w0900, w1045, w1330, w1700,
         th0900, th1045, th1330, th1515, th1700 VARCHAR(300);

  select tuesday_1045, tuesday_1330, tuesday_1515, tuesday_1700,
         wednesday_0900, wednesday_1045, wednesday_1330, wednesday_1515, wednesday_1700,
         thursday_0900, thursday_1045, thursday_1330, thursday_1515, thursday_1700
         INTO t1045, t1330, t1515, t1700,
         w0900, w1045, w1330, w1700,
         th0900, th1045, th1330, th1515, th1700
  from cmai_registrant where email=v_email;

  CALL CLASSNAME(t1045, t1045_class);
  CALL CLASSNAME(t1330, t1330_class);
  CALL CLASSNAME(t1515, t1515_class);
  CALL CLASSNAME(t1700, t1700_class);
  CALL CLASSNAME(w0900, w0900_class);
  CALL CLASSNAME(w1045, w1045_class);
  CALL CLASSNAME(w1330, w1330_class);
  CALL CLASSNAME(w1700, w1700_class);
  CALL CLASSNAME(th0900, th0900_class);
  CALL CLASSNAME(th1045, th1045_class);
  CALL CLASSNAME(th1330, th1330_class);
  CALL CLASSNAME(th1515, th1515_class);
  CALL CLASSNAME(th1700, th1700_class);

END;