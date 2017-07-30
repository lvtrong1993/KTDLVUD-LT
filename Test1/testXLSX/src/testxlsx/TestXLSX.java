/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package testxlsx;

/**
 *
 * @author Van Trong
 */
//public class TestXLSX {
import java.io.File;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

import org.apache.poi.ss.usermodel.Row;

import org.apache.poi.ss.usermodel.Sheet;

import org.apache.poi.ss.usermodel.Workbook;

import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;

import java.io.IOException;

import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;

import java.util.List;
import java.util.Map;
import java.util.Set;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.Serializable;
import java.nio.file.FileAlreadyExistsException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.HashSet;
import java.util.Scanner;
import org.apache.poi.ss.usermodel.CreationHelper;

public class TestXLSX {

    public static ArrayList<Country> countries = new ArrayList<Country>();
    public static ArrayList<Integer> indexRemove = new ArrayList<Integer>();
    public static ArrayList<Country> countries2 = new ArrayList<Country>();

    public static ArrayList<Country> countries3 = new ArrayList<Country>();
    public static ArrayList<Country> countries4 = new ArrayList<Country>();
    public static ArrayList<String> ListTest = new ArrayList<String>();
    public static ArrayList<Integer> indexList = new ArrayList<Integer>();
    private static final String FILE_PATH = "D:/testReadStudents.xlsx";

    public static void main(String args[]) throws FileNotFoundException, IOException {
//        System.out.print("Enter path to IMPORT (EX: D:/contries.txt): ");
//        //   do{
//        String xlsxPath = new Scanner(System.in).nextLine();
//        //       extensionFile(xlsxPath, "dat") ;
//        String extension = xlsxPath.substring(xlsxPath.lastIndexOf(".") + 1);
//        if (extension.equals("txt") == true) {
//            File f = new File(xlsxPath);
//            if (f.exists() && !f.isDirectory()) {
//                readTXT(xlsxPath);
//            } else {
//                System.out.println("Error reading TXT file...");
//            }///////////////////
////            checkEx=false;
//        } else {
//            System.out.println("ERROR - VUI LONG CHON FILE DINH DANG TXT");
//        }

//        try {
//            //   int data=50/0;  
//
//            WriteXLSX2("D:/contries3.xlsx");
//        } catch (ArithmeticException e) {
//            System.out.println("GHI FILE XLSX THAT BAI ");
//        }
//        ReadXLSX("D:/contries3.xlsx");
// 
/////////////////////////////////////////////
//creatXLSX();
        do {
            System.out.println("---------MENU---------");
            System.out.println("1. Mo file TXT.");
            System.out.println("2. Xuat file XLSX");
            System.out.println("3. Xem file XLSX");
            System.out.println("0. Thoat.");
            System.out.println("---------------------");
            System.out.print("Vui long nhap lua chon: ");
            Scanner nhap = new Scanner(System.in);
            int c = nhap.nextInt();
            switch (c) {

                case 1: {
                    System.out.print("Nhap duong dan file TXT (EX: D:/Countries.txt): ");
                    String txtPath = new Scanner(System.in).nextLine();
                    String extension = txtPath.substring(txtPath.lastIndexOf(".") + 1);
                    if (extension.equals("txt") == true) {
                        File f = new File(txtPath);
                        if (f.exists() && !f.isDirectory()) {
                            readTXT(txtPath);
                              System.out.println("DOC DU LIEU THANH CONG");
                        } else {
                            System.out.println("FILE KHONG TON TAI, KIEM TRA LAI");
                        }
                    } else {
                        System.out.println("ERROR - VUI LONG CHON FILE DINH DANG TXT");
                    }
                    break;
                }

                case 2: {
                    System.out.print("Nhap duong dan file XLSX (EX: D:/HocTap): ");
                    String xlsxPath = new Scanner(System.in).nextLine();
                    String extension = xlsxPath.substring(xlsxPath.lastIndexOf(".") + 1);
                    //////
                    File f = new File(xlsxPath);
                    if (f.exists() && f.isDirectory()) {
                        xlsxPath.trim();
                        String pathFile = xlsxPath + "/29_1B.xlsx";
                        //     System.out.print("okkkkkkkkkkkkkkkkk------"+pathFile);
                        File f03 = new File(pathFile);
                        if (f03.exists() && !f03.isDirectory()) {
                            WriteXLSX2(pathFile);
                        } else {
                            pathFile = pathFile.trim();
                            creatXLSX(pathFile);
                            WriteXLSX2(pathFile);
                        }
                    }
                    else{
                         System.out.print("ERROR-SAI DUONG DAN, VUI LONG NHAP LAI");
                    }
                    //////
//                    if (extension.equals("xlsx") == true) {
//                        File f2 = new File(xlsxPath);
//                        if (f2.exists() && !f2.isDirectory()) {
//                            WriteXLSX2(xlsxPath);
//                        } else {
//                            xlsxPath = xlsxPath.trim();
//                            creatXLSX(xlsxPath);
//                            WriteXLSX2(xlsxPath);
//                            // System.out.println("Error reading TXT file...");
//                        }
//                    } else {
//                        System.out.println("ERROR - VUI LONG CHON FILE DINH DANG XLSX");
//                    }
                    break;
                }
                case 3: {
                    System.out.print("Nhap duong dan file XLSX (EX: D:/Countries.xlsx): ");
                    String xlsxPath2 = new Scanner(System.in).nextLine();
                    String extension = xlsxPath2.substring(xlsxPath2.lastIndexOf(".") + 1);
                    if (extension.equals("xlsx") == true) {
                        File f3 = new File(xlsxPath2);
                        if (f3.exists() && !f3.isDirectory()) {
                            ReadXLSX(xlsxPath2);
                        } else {
                            System.out.println("ERROR - FILE KHONG TON TAI");
                        }
                    } else {
                        System.out.println("ERROR - VUI LONG CHON FILE DINH DANG XLSX");
                    }
                }

            }
            if (c == 0) {
                break;
            }
        } while (true);

///////////////////////////////////////////
    }
//WRITEING TO XLSX FILE

    static void WriteXLSX2(String path) throws FileNotFoundException, IOException {
        String extension = path.substring(path.lastIndexOf(".") + 1);
        //  if (extension.equals("xlsx") == true) {
        File myFile = new File(path);
        FileInputStream fis = new FileInputStream(myFile);
        XSSFWorkbook myWorkBook = new XSSFWorkbook(fis);
        XSSFSheet mySheet = myWorkBook.getSheetAt(0);
        Iterator<Row> rowIterator = mySheet.iterator();
        int count = 0;
        Map<Integer, Object[]> data = new HashMap<Integer, Object[]>();
        data.put(0, new Object[]{"COUNTRY", "NAME", "LONG NAME", "FOUNDING DATE", "POPULATION", "CAPITAL", "LARGEST CITY", "AREA"});
        Map<Integer, Object[]> data2 = new HashMap<Integer, Object[]>();
        for (Country ct : countries2) {
            count++;
            //  for(int i= 0; i<count; i++)
            //     count2+="a";
            String key = String.valueOf(count);
            String id = ct.getCtrID();
            String name = ct.getCtrName();
            String longName = ct.getCtrLongName();
            String city = ct.getCtrLargestCity();
            String population = ct.getCtrPopulation();
            String area = ct.getCtrAreal();
            String capital = ct.getCtrCapital();
            String date = ct.getCtrFoundingDate();

            // System.out.println(id + "--" + name + "---" + key);
            data.put(count, new Object[]{key, name, longName, date, population, capital, city, area});
        }
        Set<Integer> newRows = data.keySet();//new HashSet<String>();

        // newRows= Arrays.sort(newRows);.
        int rownum = mySheet.getLastRowNum();
        for (Integer key : newRows) //  for(int i=0; i< newRows.size(); i++)
        {
            Row row = mySheet.createRow(rownum++);
            Object[] objArr = data.get(key);//key
            int cellnum = 0;
            for (Object obj : objArr) {
                Cell cell = row.createCell(cellnum++);
                if (obj instanceof String) {
                    cell.setCellValue((String) obj);
                } else if (obj instanceof Boolean) {
                    cell.setCellValue((Boolean) obj);
                } else if (obj instanceof Date) {
                    cell.setCellValue((Date) obj);
                } else if (obj instanceof Double) {
                    cell.setCellValue((Double) obj);
                }
            }
        }

// open an OutputStream to save written data into XLSX file 
        FileOutputStream os = new FileOutputStream(myFile);
        myWorkBook.write(os);
        System.out.println("Ghi file XLSX thanh cong ...");
//        } else {
//            System.out.println("ERROR - DUONG DAN FILE XLSX KHONG HOP LE");
//        }
    }
///////////////////////////////////////////////////////

    static void creatXLSX(String path) throws FileNotFoundException, IOException {
        Workbook wb = new XSSFWorkbook();
        CreationHelper createHelper = wb.getCreationHelper();
        Sheet sheet = wb.createSheet("new sheet");

// Create a row and put some cells in it. Rows are 0 based.
        Row row = sheet.createRow((short) 0);
// Create a cell and put a value in it.
        Cell cell = row.createCell(0);
        // cell.setCellValue(1);

// Or do it on one line.
//        row.createCell(1).setCellValue(1.2);
//        row.createCell(2).setCellValue(
//                createHelper.createRichTextString("This is a string"));
//        row.createCell(3).setCellValue(true);
// Write the output to a file
        FileOutputStream fileOut = new FileOutputStream(path);
        wb.write(fileOut);
        fileOut.close();
    }

    //////////////////////////////////////
    static void ReadXLSX(String path) throws FileNotFoundException, IOException {
        //        System.out.println("---------------------------doc file 33333-------------------------------------- ...");
        String extension = path.substring(path.lastIndexOf(".") + 1);
        if (extension.equals("xlsx") == true) {
            File myFile = new File("D:/contries3.xlsx");
            FileInputStream fis = new FileInputStream(myFile);
// Finds the workbook instance for XLSX file
            XSSFWorkbook myWorkBook = new XSSFWorkbook(fis);
// Return first sheet from the XLSX workbook
            XSSFSheet mySheet = myWorkBook.getSheetAt(0);
            // Get iterator to all the rows in current sheet
            Iterator<Row> rowIterator = mySheet.iterator();
            // Traversing over each row of XLSX file
            while (rowIterator.hasNext()) {
                Row row = rowIterator.next();
                // For each row, iterate through each columns
                Iterator<Cell> cellIterator = row.cellIterator();
                while (cellIterator.hasNext()) {
                    Cell cell = cellIterator.next();
                    switch (cell.getCellType()) {
                        case Cell.CELL_TYPE_STRING:
                            System.out.print(cell.getStringCellValue() + "\t");
                            break;
                        case Cell.CELL_TYPE_NUMERIC:
                            System.out.print(cell.getNumericCellValue() + "\t");
                            break;
                        case Cell.CELL_TYPE_BOOLEAN:
                            System.out.print(cell.getBooleanCellValue() + "\t");
                            break;
                        default:
                    }
                }
                System.out.println("");
            }
        } else {
            System.out.println("ERROR - DUONG DAN FILE XLSX KHONG HOP LE");
        }
    }

    static void WriteXLSX(String path) throws FileNotFoundException, IOException {
        File myFile = new File(path);//("D:/contries.xlsx");
        FileInputStream fis = new FileInputStream(myFile);
        XSSFWorkbook myWorkBook = new XSSFWorkbook(fis);
        XSSFSheet mySheet = myWorkBook.getSheetAt(0);
        Iterator<Row> rowIterator = mySheet.iterator();

        ///////////////////////////////////////////
        //write to xlsx file
        int count = 0;
        Map<String, Object[]> data = new HashMap<String, Object[]>();
        Map<Integer, Object[]> data2 = new HashMap<Integer, Object[]>();
        for (Country ct : countries2) {
            count++;
            String key = String.valueOf(count);
            String id = ct.getCtrID();
            String name = ct.getCtrName();
            String longName = ct.getCtrLongName();
            String city = ct.getCtrLargestCity();
            String population = ct.getCtrPopulation();
            String area = ct.getCtrAreal();
            String capital = ct.getCtrCapital();
            String date = ct.getCtrFoundingDate();

            //       System.out.println(id + "--" + name + "---" + key);
            // data.put(key, new Object[]{id, name, longName, city, population, area, capital, date});
        }
        for (int i = 1; i < 100; i++) {
            String key = String.valueOf(i);
            data.put(key, new Object[]{"a" + key, "b" + key, "c" + key, "d" + key, "e" + key, "f" + key, "g" + key, "h" + key});

        }

        ///////////////////////////////
//        ArrayList<Integer> keyValue = new ArrayList<Integer>();
//        ArrayList<String> keyValue2 = new ArrayList<String>();
//        Set<String> rows = data.keySet();
        Set<String> newRows = data.keySet();//new HashSet<String>();

        // newRows= Arrays.sort(newRows);.
        int rownum = mySheet.getLastRowNum();
        for (String key : newRows) {
            Row row = mySheet.createRow(rownum++);
            Object[] objArr = data.get(key);
            int cellnum = 0;
            for (Object obj : objArr) {
                Cell cell = row.createCell(cellnum++);
                if (obj instanceof String) {
                    cell.setCellValue((String) obj);
                } else if (obj instanceof Boolean) {
                    cell.setCellValue((Boolean) obj);
                } else if (obj instanceof Date) {
                    cell.setCellValue((Date) obj);
                } else if (obj instanceof Double) {
                    cell.setCellValue((Double) obj);
                }
            }
        }
        System.out.println("xonggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg");
    }

// ./ WRITE TO XLSX FILE    
///bai 1
    static void extensionFile(String file, String extension) {
        String ex = file.substring(file.lastIndexOf(".") + 1);
        if (ex.equals(extension) != true) {
            System.out.println("Vui long chon file co dinh dang ." + extension);
            //       extensionFile( xx,  xxx);
        }
    }

    static void readTXT(String path) {
        Country ct = null;

        ArrayList<String> country = new ArrayList<String>();
        int xxx = 1;
        try {
            String input = path;//D:\\contries2.txt
            FileInputStream fis = new FileInputStream(new File(input));
            BufferedReader br = new BufferedReader(new InputStreamReader(fis));
            String line;
            int flagCheckNull = 0;
            int dem = 1;
            while ((line = br.readLine()) != null) {
                line.toString();
                ArrayList<String> checkCountry = new ArrayList<>();
                line = line.trim();
                if (line != null && !line.isEmpty()) {
                    for (String w : line.split("=", 0)) {
                        w.trim();
                        checkCountry.add(w);
                    }
                    if (checkCountry.get(0).equals("country") == true) {
                        ct = new Country();
                        {
                            countries.add(ct);
                        }
                        ct.setCtrID(checkCountry.get(1));
                    }
                    {
                        if (checkCountry.get(0).equals("name") == true) {
                            dem++;
                            ct.setCtrName(checkCountry.get(0));
                            String checkString;
                            String testStr = line.substring(line.lastIndexOf("=") + 1);
                            ct.setCtrName(testStr);
                        } else {
                            if (checkCountry.get(0).equals("longName") == true) {
                                ct.setCtrLongName(checkCountry.get(1));
                            } else {
                                if (checkCountry.get(0).equals("foundingDate") == true) {
                                    ct.setCtrFoundingDate(checkCountry.get(1));
                                } else {
                                    if (checkCountry.get(0).equals("population") == true) {
                                        ct.setCtrPopulation(checkCountry.get(1));
                                    } else {

                                        if (checkCountry.get(0).equals("capital") == true) {
                                            ct.setCtrCapital(checkCountry.get(1));
                                        } else {
                                            if (checkCountry.get(0).equals("largestCity") == true) {
                                                ct.setCtrLargestCity(checkCountry.get(1));
                                            } else {
                                                if (checkCountry.get(0).equals("area") == true) {
                                                    ct.setCtrAreal(checkCountry.get(1));
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                    }

                    country.clear();
                    checkCountry.clear();

                }
            }
            int find = 0;
            for (Country ctr : countries) {
                if (ctr.getCtrName() == null) {
                    ctr.setCtrName("");
                }
                if (ctr.getCtrLongName() == null) {
                    ctr.setCtrLongName("");
                }
                if (ctr.getCtrFoundingDate() == null) {
                    ctr.setCtrFoundingDate("");
                }
                if (ctr.getCtrPopulation() == null) {
                    ctr.setCtrPopulation("");
                }
                if (ctr.getCtrCapital() == null) {
                    ctr.setCtrCapital("");
                }
                if (ctr.getCtrLargestCity() == null) {
                    ctr.setCtrLargestCity("");
                }
                if (ctr.getCtrAreal() == null) {
                    ctr.setCtrAreal("");
                }
            }
            //countries.remove(0);
            Country first = new Country();
            //    first.InputCountry("cc", "cc2", "cc3", "cc4", "cc5", "cc6", "cc7", "cc8");
            //     countries2.add(first);
            for (Country ctr : countries) {
                if ((ctr.getCtrName().isEmpty() != true) || (ctr.getCtrLongName().isEmpty() != true) || (ctr.getCtrFoundingDate().isEmpty() != true) || (ctr.getCtrPopulation().isEmpty() != true) || (ctr.getCtrCapital().isEmpty() != true) || (ctr.getCtrLargestCity().isEmpty() != true) || (ctr.getCtrAreal()).isEmpty() != true) {
                    indexRemove.add(countries.indexOf(ctr));
//                        countries.remove( countries.indexOf(ctr));
                    countries2.add(ctr);
                }

            }

            for (Country ctr : countries2) {
                if (!ctr.getCtrAreal().isEmpty() && ctr.getCtrAreal() != null && ctr.getCtrAreal().contains("mi") && (!ctr.getCtrAreal().contains("Mimi"))) {

                    String convertArea = convertArea(ctr.getCtrAreal());
//                   ctr.setCtrAreal(convertArea);
                    ctr.setCtrAreal(convertArea);
                }

            }
            for (int i = 0; i < countries2.size(); i++) {
                boolean check = false;
                for (int j = 0; j < countries2.size(); j++) {
                    if (isDuplicateCountry(countries2.get(i), countries2.get(j))) {
                        //        System.out.println("Removed " + countries2.get(j).getCtrID());
                        check = true;
                        countries2.remove(countries2.get(j));
                    }
                    if (check == true) {
                        countries2.remove(countries2.get(i));
                        check = false;
                    }
                }
            }

//            for (Country ctr : countries2) {
//                System.out.println(ctr.getCtrID() + "--" + countries.indexOf(ctr));
//                System.out.println(ctr.getCtrName());
//                System.out.println(ctr.getCtrLongName());
//                System.out.println(ctr.getCtrFoundingDate());
//                System.out.println(ctr.getCtrPopulation());
//                System.out.println(ctr.getCtrCapital());
//                System.out.println(ctr.getCtrLargestCity());
//                System.out.println(ctr.getCtrAreal());
//            }
            br.close();
        } catch (IOException e) {
            e.printStackTrace();
        }

    }

//    static void WriteXLSXFile(String path) throws FileNotFoundException {
//        File myFile = new File("D:/Employee.xlsx");
//        FileInputStream fis = new FileInputStream(myFile);
//        XSSFWorkbook myWorkBook = new XSSFWorkbook(fis);
//        XSSFSheet mySheet = myWorkBook.getSheetAt(0);
//        Iterator<Row> rowIterator = mySheet.iterator();
//        while (rowIterator.hasNext()) {
//            Row row = rowIterator.next();
//            Iterator<Cell> cellIterator = row.cellIterator();
//        }
    static boolean isNull(String str) {
        if (str != null) {
            return false;
        }
        return true;
    }

    static boolean isDuplicateCountry(Country ctr1, Country ctr2) {
        if ((ctr1.getCtrName().equals(ctr2.getCtrName())) && (ctr1.getCtrLongName().equals(ctr2.getCtrLongName())) && (ctr1.getCtrFoundingDate().equals(ctr2.getCtrFoundingDate())) && (ctr1.getCtrCapital().equals(ctr2.getCtrCapital())) && (ctr1.getCtrPopulation().equals(ctr2.getCtrPopulation())) && (ctr1.getCtrLargestCity().equals(ctr2.getCtrLargestCity())) && (ctr1.getCtrAreal().equals(ctr2.getCtrAreal()))) {
            return true;
        }
        return false;
    }

    static String removeSpace(String s1) {

        String replaceString = s1.replaceAll("\\s", "");
//System.out.println(replaceString); 
        return replaceString;
    }

    static String convertArea(String area) {
        String tmp = "";
        String newArea = "";
        area = area.trim();
        area = area.replace(',', '.');
        /* thay the toan bo nhung ky tu khong phai so, khong phai dau am, khong phai dau cham bang dau phay*/
        area = area.replaceAll("[^0-9,-\\.]", ",");
        /*cat thanh cac phan tu thong qua dau phay */
        String[] item = area.split(",");
        for (int i = 0; i < item.length; i++) {
            try {
                tmp += item[i];
            } catch (NumberFormatException e) {
            }
        }
        double convertDb = Double.parseDouble(tmp);
        convertDb = convertDb / 1000000;
        newArea = String.valueOf(convertDb) + "km";
        return newArea;
    }

    static String splitString(String str) {
        String result = "";
        /* thay the toan bo nhung ky tu khong phai so, khong phai dau am, khong phai dau cham bang dau phay*/
        str = str.replaceAll("[^0-9,-\\.]", ",");
        /*cat thanh cac phan tu thong qua dau phay */
        String[] item = str.split(",");
        for (int i = 0; i < item.length; i++) {
            try {
                result += item[i];
            } catch (NumberFormatException e) {
            }
        }
        return result;

    }

}

class Country implements Serializable {

    private String ctrID;
    private String ctrName;
    private String ctrLongName;
    private String ctrFoundingDate;
    private String ctrPopulation;
    private String ctrCapital;
    private String ctrLargestCity;
    private String ctrArea;

    public void setCtrID(String id) {
        this.ctrID = id;
    }

    public String getCtrID() {
        return ctrID;
    }

    public void setCtrName(String name) {
        this.ctrName = name;
    }

    public String getCtrName() {
        return ctrName;
    }

    public void setCtrLongName(String longName) {
        this.ctrLongName = longName;
    }

    public String getCtrLongName() {
        return ctrLongName;
    }

    public void setCtrFoundingDate(String foundingDate) {
        this.ctrFoundingDate = foundingDate;
    }

    public String getCtrFoundingDate() {
        return ctrFoundingDate;
    }

    public void setCtrPopulation(String population) {
        this.ctrPopulation = population;
    }

    public String getCtrPopulation() {
        return ctrPopulation;
    }

    public void setCtrCapital(String capital) {
        this.ctrCapital = capital;
    }

    public String getCtrCapital() {
        return ctrCapital;
    }

    public void setCtrLargestCity(String lCity) {
        this.ctrLargestCity = lCity;
    }

    public String getCtrLargestCity() {
        return ctrLargestCity;
    }

    public void setCtrAreal(String area) {
        this.ctrArea = area;
    }

    public String getCtrAreal() {
        return ctrArea;
    }

    public void Country(String ctrID, String ctrName, String ctrLongName, String ctrFoundingDate, String ctrPopulation, String ctrCapital, String ctrLargestCity, String ctrArea) {
        this.ctrID = ctrID;
        this.ctrName = ctrName;
        this.ctrLongName = ctrLongName;
        this.ctrID = ctrFoundingDate;
        this.ctrPopulation = ctrPopulation;
        this.ctrCapital = ctrCapital;
        this.ctrLargestCity = ctrLargestCity;
        this.ctrArea = ctrArea;
    }

    public void InputCountry(String ctrID, String ctrName, String ctrLongName, String ctrFoundingDate, String ctrPopulation, String ctrCapital, String ctrLargestCity, String ctrArea) {
//        studentId = in.nextInt();
        this.ctrID = ctrID;
        this.ctrName = ctrName;
        this.ctrLongName = ctrLongName;
        this.ctrID = ctrFoundingDate;
        this.ctrPopulation = ctrPopulation;
        this.ctrCapital = ctrCapital;
        this.ctrLargestCity = ctrLargestCity;
        this.ctrArea = ctrArea;
    }
}
