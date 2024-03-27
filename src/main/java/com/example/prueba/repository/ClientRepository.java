package com.example.prueba.repository;
import org.springframework.data.jpa.repository.JpaRepository;
import com.example.prueba.entity.Client;

public interface ClientRepository extends JpaRepository<Client,Integer>{
    
}
