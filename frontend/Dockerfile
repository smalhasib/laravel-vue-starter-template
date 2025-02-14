FROM node:20-alpine AS development

WORKDIR /app

# Copy package files first for better caching
COPY package*.json ./

# Install dependencies
RUN npm install

# Don't copy node_modules from host
COPY . .

EXPOSE 3000

# Use development server with hot reload
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]

FROM node:20-alpine

WORKDIR /app

# Copy package files first for better caching
COPY package*.json ./

# Install dependencies
RUN npm install

# Don't copy node_modules from host
COPY . .

EXPOSE 3000

# Use development server with hot reload
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"] 