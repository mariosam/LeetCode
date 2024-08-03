/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfSeniorCitizensTest {

    @Test
	public void testNumberOfSeniorCitizens() throws Exception {
        //Test 1
        int want = 2;
        int got = NumberOfSeniorCitizens.countSeniors( new String[]{"7868190130M7522","5303914400F9211","9273338290F4010"} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = NumberOfSeniorCitizens.countSeniors( new String[]{"1313579440F2036","2921522980M5644"} );
        assertEquals(want, got);
	}

}
