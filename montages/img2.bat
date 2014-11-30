montage -label %t -frame 5 -background #336699 +polaroid -resize 50% -geometry +4+4 *_0.jpg frame.jpg

montage *.jpg -border 2x2 -background black +polaroid -resize 50% -background LightGray -geometry -50-50 -tile x3 collage.jpg

montage *_0.jpg -border 2x2 -background black +polaroid -resize 50% -background LightGray -geometry -30-30 -tile x2 montage.jpg

montage -label '%t\n%wx%h' -resize 150x150 *_0.jpg -geometry +3+3 -tile 5x -frame 5 collage.jpg 

montage *_0.jpg -border 2x2 -background black +polaroid -resize 50% -background LightGray -geometry -50-50 -tile x3 collage.jpg

montage -gravity center null: *_0.jpg -thumbnail 128x128 -sharpen 10 -set caption ^%%t -bordercolor snow -background grey20 +polaroid -set label %t -background Transparent -geometry -30-30 -tile 5x collage.jpg
