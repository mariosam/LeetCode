/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ProcessStringWithSpecialOperationsITest {

    @Test
	public void testProcessStringWithSpecialOperationsI() throws Exception {
        //Test 1
        String want = "ba";
        String got = ProcessStringWithSpecialOperationsI.processStr("a#b%*");
        assertEquals(want, got);
        //Test 2
        want = "";
        got = ProcessStringWithSpecialOperationsI.processStr("z*#");
        assertEquals(want, got);
	}

}
