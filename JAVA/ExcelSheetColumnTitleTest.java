/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ExcelSheetColumnTitleTest {

    @Test
	public void testExcelSheetColumnTitle() throws Exception {
        //Test 1
        String want = "A";
        String got = ExcelSheetColumnTitle.convertToTitle( 1 );
        assertEquals(want, got);
        //Test 2
        want = "AB";
        got = ExcelSheetColumnTitle.convertToTitle( 28 );
        assertEquals(want, got);
        //Test 3
        want = "ZY";
        got = ExcelSheetColumnTitle.convertToTitle( 701 );
        assertEquals(want, got);
	}

}
