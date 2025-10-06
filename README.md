# 🚀 Qurik Blade UI Kit

## Overview

This project is an early-stage development of a modern, responsive UI kit and application structure built on the Laravel framework. It leverages Blade templates for the core structure, Tailwind CSS for utility-first styling, DaisyUI for pre-styled components, and Livewire for dynamic, interactive functionality without writing complex JavaScript.

> ⚠️ **Note:** This project is currently in active, early development. Expect frequent additions, removals, and refactoring as the design patterns and component library evolve.

## 🛠️ Tech Stack & Setup

### Requirements

- PHP (8.1+)
- Composer
- Node.js & npm/pnpm

### Installation

1. **Install PHP dependencies:**
   
   Install the Qurik component library:
   ```bash
   composer require end3rman/qurik
   ```

2. **Configure your CSS:**
   
   Add the following line to your main CSS file (`resources/css/app.css`):
   ```css
   @import "../../vendor/end3rman/qurik/dist/qurik.css";
   ```

3. **Install Node dependencies and compile assets:**
   ```bash
   npm install
   npm run dev  # or npm run watch for continuous compilation
   ```

## 🏗️ Future Scope

The goal of this project is to create a robust foundation for building complex, single-page application experiences using the simplicity of Laravel Blade and the power of Livewire components.

### Current Focus Areas

- Developing reusable Livewire components
- Implementing a responsive layout using DaisyUI classes
- Establishing consistent dark/light mode switching

## 🙏 Credits and Acknowledgments

This project would not be possible without the incredible work of the open-source community. We gratefully acknowledge the following projects:

- **Tailwind CSS**: A utility-first CSS framework for rapidly building custom designs
  - [https://tailwindcss.com/](https://tailwindcss.com/)
- **DaisyUI**: A component library that works as a Tailwind CSS plugin, providing ready-made classes for common UI elements
  - [https://daisyui.com/](https://daisyui.com/)
- **Livewire**: A full-stack framework for Laravel that makes building dynamic interfaces simple, by composing PHP classes that feel like standard Blade components
  - [https://livewire.laravel.com/](https://livewire.laravel.com/)
