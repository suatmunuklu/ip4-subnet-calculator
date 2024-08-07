<?php
function getIPClass($ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $octet = explode('.', $ip)[0];
        if ($octet >= 1 && $octet <= 126) return 'A';
        if ($octet >= 128 && $octet <= 191) return 'B';
        if ($octet >= 192 && $octet <= 223) return 'C';
        if ($octet >= 224 && $octet <= 239) return 'D';
        if ($octet >= 240 && $octet <= 255) return 'E';
    }
    return 'Unknown';
}

function getIPType($ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $octet = explode('.', $ip)[0];
        if ($octet == 10 || ($octet == 172 && ($octet >= 16 && $octet <= 31)) || ($octet == 192 && $octet == 168)) {
            return 'Private';
        }
        return 'Public';
    }
    return 'Unknown';
}
?>