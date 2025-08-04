# 📝 Hướng Dẫn Thêm Dự Án

## 🚀 Cách Thêm Dự Án Mới

### 1. Mở file `script.js`
Tìm phần `projectsData` array ở cuối file.

### 2. Thêm dự án mới
Thêm object mới vào array `projectsData`:

```javascript
const projectsData = [
    {
        title: "Tên Dự Án",
        description: "Mô tả ngắn gọn về dự án",
        image: "fas fa-icon-name", // Icon từ FontAwesome
        website: "https://your-website.com",
        github: "https://github.com/your-username/project",
        tech: ["HTML", "CSS", "JavaScript"]
    }
];
```

### 3. Các trường thông tin:

- **title**: Tên dự án
- **description**: Mô tả ngắn gọn
- **image**: Icon FontAwesome (ví dụ: `fas fa-code`, `fas fa-mobile-alt`, `fas fa-laugh-squint`)
- **website**: Link đến website live
- **github**: Link đến GitHub repository
- **tech**: Mảng các công nghệ sử dụng

### 4. Ví dụ thực tế:

```javascript
{
    title: "Web Troll",
    description: "Website troll vui nhộn với hiệu ứng đẹp mắt và âm thanh",
    image: "fas fa-laugh-squint",
    website: "https://my-troll-website.netlify.app",
    github: "https://github.com/hoanguyen/troll-website",
    tech: ["HTML", "CSS", "JavaScript", "Web Audio API"]
}
```

## 🎨 Icons có sẵn:

- `fas fa-code` - Code/Programming
- `fas fa-mobile-alt` - Mobile App
- `fas fa-laugh-squint` - Fun/Troll
- `fas fa-shopping-cart` - E-commerce
- `fas fa-gamepad` - Game
- `fas fa-palette` - Design
- `fas fa-chart-line` - Analytics
- `fas fa-robot` - AI/Machine Learning

## ⚡ Tính năng tự động:

- ✅ Section tự ẩn khi không có dự án
- ✅ Section tự hiện khi có dự án
- ✅ Animations tự động cho project cards mới
- ✅ Responsive design cho mọi thiết bị
- ✅ Hover effects và interactions

## 🔧 Lưu ý:

- Đảm bảo links website và GitHub hoạt động
- Sử dụng icon phù hợp với loại dự án
- Mô tả ngắn gọn nhưng đầy đủ thông tin
- Liệt kê đúng các công nghệ đã sử dụng 