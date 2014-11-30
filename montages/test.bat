montage -size 400x400 null: ./*_[01].jpg null: ^
          -auto-orient  -thumbnail 300x300 -set caption %t ^
          -bordercolor Lavender -background black +polaroid -resize 70% ^
          -gravity center -background none -extent 260x250 ^
          -background #d1d8c8 -geometry -10+2  -tile x5  polaroid.jpg