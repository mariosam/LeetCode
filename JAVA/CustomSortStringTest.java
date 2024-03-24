/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CustomSortStringTest {

    @Test
	public void testCustomSortString() throws Exception {
        //Test 1
        String want =  "cbad";
        String got = CustomSortString.customSortString( "cba", "abcd" );
        assertEquals(want, got);
        //Test 2
        want =  "bcad";
        got = CustomSortString.customSortString( "bcafg", "abcd" );
        assertEquals(want, got);
	}

}
