TYPE=VIEW
query=select if(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER` is null,\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`) AS `user`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`EVENT_NAME` AS `event_name`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`COUNT_STAR` AS `total`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT` AS `latency`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`MAX_TIMER_WAIT` AS `max_latency` from `performance_schema`.`events_waits_summary_by_user_by_event_name` where `performance_schema`.`events_waits_summary_by_user_by_event_name`.`EVENT_NAME` like \'wait/io/file%\' and `performance_schema`.`events_waits_summary_by_user_by_event_name`.`COUNT_STAR` > 0 order by if(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER` is null,\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`),`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT` desc
md5=090cb2483f78e6606559dbe59df50262
updatable=1
algorithm=1
definer_user=mariadb.sys
definer_host=localhost
suid=0
with_check_option=0
timestamp=0001695127584854370
create-version=2
source=SELECT IF(user IS NULL, \'background\', user) AS user,\n       event_name,\n       count_star AS total,\n       sum_timer_wait AS latency,\n       max_timer_wait AS max_latency\n  FROM performance_schema.events_waits_summary_by_user_by_event_name\n WHERE event_name LIKE \'wait/io/file%\'\n   AND count_star > 0\n ORDER BY user, sum_timer_wait DESC;
client_cs_name=utf8mb3
connection_cl_name=utf8mb3_general_ci
view_body_utf8=select if(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER` is null,\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`) AS `user`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`EVENT_NAME` AS `event_name`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`COUNT_STAR` AS `total`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT` AS `latency`,`performance_schema`.`events_waits_summary_by_user_by_event_name`.`MAX_TIMER_WAIT` AS `max_latency` from `performance_schema`.`events_waits_summary_by_user_by_event_name` where `performance_schema`.`events_waits_summary_by_user_by_event_name`.`EVENT_NAME` like \'wait/io/file%\' and `performance_schema`.`events_waits_summary_by_user_by_event_name`.`COUNT_STAR` > 0 order by if(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER` is null,\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`),`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT` desc
mariadb-version=110102
