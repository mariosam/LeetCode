/** 
* @version JAVA
* @author MARIO SAM <eu@mariosam.com.br>
* @see I would love to work with you instead solving web code tests: hire me!
* $ mvn clean test -Dtest=your.package.TestClassName
*/ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ConstructStringWithRepeatLimitTest {

   @Test
   public void testConstructStringWithRepeatLimit() throws Exception {
       //Test 1
       String want = "zzcccac";
       String got = ConstructStringWithRepeatLimit.repeatLimitedString( "cczazcc", 3 );
       assertEquals(want, got);
       //Test 2
       want = "bbabaa";
       got = ConstructStringWithRepeatLimit.repeatLimitedString( "aababab", 2 );
       assertEquals(want, got);
   }

}
