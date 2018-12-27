#!/bin/sh
LOGFILE=$1
PROGRAM=$2
RBSNAME=$3
cat << END
input(
    type="imfile"
    File="/runtime/log/${LOGFILE}"
    tag="_"
    Ruleset="rs_${PROGRAM}"
    PersistStateInterval="10"
)

ruleset(name="rs_${PROGRAM}"){
    action(
        type="mmnormalize"
        ruleBase="/etc/rsyslog.d/${RBSNAME}"
    )
    if (\$!tag == "") then {
        set \$!tag = "badlog.${PROGRAM}";
    }
    set \$!host = \$hostname;
    unset \$!event.tags;
    action(
        type="omfwd"
        Target="log.tiaozhan.com"
        Port="24224"
        Protocol="tcp"
        Template="tp_tz"
   )
}
END
