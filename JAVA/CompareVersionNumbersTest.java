/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CompareVersionNumbersTest {

    @Test
	public void testCompareVersionNumbers() throws Exception {
            //Test 1
            int want = -1;
            int got = CompareVersionNumbers.compareVersion( "1.2", "1.10" );
            assertEquals(want, got);
            //Test 2
            want = 0;
            got = CompareVersionNumbers.compareVersion( "1.01", "1.001" );
            assertEquals(want, got);
            //Test 3
            want = 0;
            got = CompareVersionNumbers.compareVersion( "1.0", "1.0.0.0" );
            assertEquals(want, got);
	}

}
