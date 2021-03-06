<?php

namespace ProjectInfinity\ReportRTS\util;

class PermissionHandler {

    const isStaff = "reportrts.staff";

    const canAssign = "reportrts.command.assign";
    const canBan = "reportrts.command.ban";
    const canReload = "reportrts.command.reload";
    const canReadAll = "reportrts.command.read";
    const canReadSelf = "reportrts.command.self";
    const canOpenTicket = "reportrts.command.open";
    const canReopenTicket = "reportrts.command.reopen";
    const canCloseTicket = "reportrts.command.close";
    const canClaimTicket = "reportrts.command.claim";
    const canHoldTicket = "reportrts.command.hold";
    const canSeeStaff = "reportrts.command.list";
    const canSeeStats = "reportrts.command.stats";
    const canSeeHelp = "reportrts.command.help";
    const canSearch = "reportrts.command.search";
    const canTeleport = "reportrts.command.teleport";
    const canBroadcast = "reportrts.command.broadcast";
    const canManageNotifications = "reportrts.command.notification";

    const bypassTicketLimit = "reportrts.bypass.ticket";
    const bypassTicketClaim = "reportrts.bypass.claim";
}