#!/bin/bash

# Kiểm tra nếu chưa có tham số commit message thì dùng mặc định
COMMIT_MSG=${1:-"Update theme"}

# Hiển thị tiến trình
echo "🔄 Đang thêm các thay đổi..."
git add .

echo "📝 Đang commit với message: '$COMMIT_MSG'..."
git commit -m "$COMMIT_MSG"

echo "🚀 Đang đẩy code lên nhánh main..."
git push origin main

echo "✅ Hoàn tất!"
