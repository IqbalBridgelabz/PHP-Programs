<?php
class EagerInitializedSingleton {
    
    private $instance = new EagerInitializedSingleton();
    
    //private constructor to avoid client applications to use constructor
    function EagerInitializedSingleton(){
        
    }

    function getInstance(){
        return $instance;
    }
}

class StaticBlockSingleton {

private $instance;

function StaticBlockSingleton(){
    $this->instance = $instance;
}
}
//static block initialization for exception handling
//static{
   
$instance = new StaticBlockSingleton();
   

public static StaticBlockSingleton getInstance(){
    return instance;
}
}

public class LazyInitializedSingleton {

private static LazyInitializedSingleton instance;

private LazyInitializedSingleton(){}

public static LazyInitializedSingleton getInstance(){
    if(instance == null){
        instance = new LazyInitializedSingleton();
    }
    return instance;
}
}

public class ThreadSafeSingleton {

private static ThreadSafeSingleton instance;

private ThreadSafeSingleton(){}

public static synchronized ThreadSafeSingleton getInstance(){
    if(instance == null){
        instance = new ThreadSafeSingleton();
    }
    return instance;
}

}

public static ThreadSafeSingleton getInstanceUsingDoubleLocking(){
    if(instance == null){
        synchronized (ThreadSafeSingleton.class) {
            if(instance == null){
                instance = new ThreadSafeSingleton();
            }
        }
    }
    return instance;
}

public class BillPughSingleton {

private BillPughSingleton(){}

private static class SingletonHelper{
    private static final BillPughSingleton INSTANCE = new BillPughSingleton();
}

public static BillPughSingleton getInstance(){
    return SingletonHelper.INSTANCE;
}
}

public class ReflectionSingletonTest {

public static void main(String[] args) {
    EagerInitializedSingleton instanceOne = EagerInitializedSingleton.getInstance();
    EagerInitializedSingleton instanceTwo = null;
    try {
        Constructor[] constructors = EagerInitializedSingleton.class.getDeclaredConstructors();
        for (Constructor constructor : constructors) {
            //Below code will destroy the singleton pattern
            constructor.setAccessible(true);
            instanceTwo = (EagerInitializedSingleton) constructor.newInstance();
            break;
        }
    } catch (Exception e) {
        e.printStackTrace();
    }
    System.out.println(instanceOne.hashCode());
    System.out.println(instanceTwo.hashCode());
}

}

public enum EnumSingleton {

INSTANCE;

public static void doSomething(){
    //do something
}
}

public class SerializedSingleton implements Serializable{

private static final long serialVersionUID = -7604766932017737115L;

private SerializedSingleton(){}

private static class SingletonHelper{
    private static final SerializedSingleton instance = new SerializedSingleton();
}

public static SerializedSingleton getInstance(){
    return SingletonHelper.instance;
}

}
The problem with serialized singleton class is that whenever we deserialize it, it will create a new instance of the class. Let’s see it with a simple program.

Copy
package com.journaldev.singleton;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInput;
import java.io.ObjectInputStream;
import java.io.ObjectOutput;
import java.io.ObjectOutputStream;

public class SingletonSerializedTest {

public static void main(String[] args) throws FileNotFoundException, IOException, ClassNotFoundException {
    SerializedSingleton instanceOne = SerializedSingleton.getInstance();
    ObjectOutput out = new ObjectOutputStream(new FileOutputStream(
            "filename.ser"));
    out.writeObject(instanceOne);
    out.close();
    
    //deserailize from file to object
    ObjectInput in = new ObjectInputStream(new FileInputStream(
            "filename.ser"));
    SerializedSingleton instanceTwo = (SerializedSingleton) in.readObject();
    in.close();
    
    System.out.println("instanceOne hashCode="+instanceOne.hashCode());
    System.out.println("instanceTwo hashCode="+instanceTwo.hashCode());
    
}

}

protected Object readResolve() {
    return getInstance();
}