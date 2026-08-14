<?php
// Automatic Image Optimizer for Fath Creative Projects
$lockFile = __DIR__ . '/assets/img/projects/.optimized_v1';

if (!file_exists($lockFile) && function_exists('imagecreatefromwebp')) {
    $dir = __DIR__ . '/assets/img/projects';
    if (is_dir($dir)) {
        $files = glob($dir . '/*.webp');
        foreach ($files as $file) {
            $info = @getimagesize($file);
            if ($info && $info[0] > 1200) {
                $src = @imagecreatefromwebp($file);
                if ($src) {
                    $origW = $info[0];
                    $origH = $info[1];
                    $maxW = 1200;
                    $maxH = (int)round(($origH / $origW) * $maxW);
                    
                    $dst = imagecreatetruecolor($maxW, $maxH);
                    imagealphablending($dst, false);
                    imagesavealpha($dst, true);
                    
                    imagecopyresampled($dst, $src, 0, 0, 0, 0, $maxW, $maxH, $origW, $origH);
                    imagewebp($dst, $file, 82);
                    
                    imagedestroy($src);
                    imagedestroy($dst);
                }
            }
        }
    }
    @file_put_contents($lockFile, date('Y-m-d H:i:s'));
}
?>
