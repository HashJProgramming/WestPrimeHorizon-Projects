SELECT s.*, v.id as violation_id, v.sanctions, DATE_FORMAT(v.created_at, "%Y-%m-%d %h:%i %p") AS created_at, v.type, v.offense, v.level FROM violations v 
        LEFT JOIN students s ON v.student_id = s.id 
        WHERE LENGTH(v.sanctions) > 0 AND s.fullname LIKE "%ad%" ORDER BY s.fullname ASC