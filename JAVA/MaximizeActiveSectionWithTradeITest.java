/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximizeActiveSectionWithTradeITest {

    @Test
	public void testMaximizeActiveSectionWithTradeI() throws Exception {
        //Test 1
        int want = 1;
        int got = MaximizeActiveSectionWithTradeI.maxActiveSectionsAfterTrade("01");
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = MaximizeActiveSectionWithTradeI.maxActiveSectionsAfterTrade("0100");
        assertEquals(want, got);
        //Test 3
        want = 7;
        got = MaximizeActiveSectionWithTradeI.maxActiveSectionsAfterTrade("1000100");
        assertEquals(want, got);
        //Test 4
        want = 4;
        got = MaximizeActiveSectionWithTradeI.maxActiveSectionsAfterTrade("01010");
        assertEquals(want, got);
	}

}
