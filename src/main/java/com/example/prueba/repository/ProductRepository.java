package com.example.prueba.repository;
import org.springframework.data.jpa.repository.JpaRepository;
import com.example.prueba.entity.Product;

public interface ProductRepository extends JpaRepository<Product,Integer>{
    
}
